/**
 * WordPress dependencies
 */
import { store, getContext } from "@wordpress/interactivity";

store("create-block", {
  actions: {
    guessAttempt: () => {
      const context = getContext();
      if (!context.solved) {
        if (context.index === context.correctAnswer) {
          context.showCongrats = true;
          context.solved = true;
        } else {
          context.showSorry = true;
          setTimeout(() => {
            context.showSorry = false;
          }, 2600);
        }
      }
    },
    toggle: () => {
      const context = getContext();
      context.isOpen = !context.isOpen;
    },
  },
  callbacks: {
    logIsOpen: () => {
      const { isOpen } = getContext();
      // Log the value of `isOpen` each time it changes.
      console.log(`Is open: ${isOpen}`);
    },
  },
});
