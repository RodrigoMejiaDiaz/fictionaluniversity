import { registerBlockType } from "@wordpress/blocks";
import metadata from "./block.json";

function Edit() {
  return <div>Gello, I amthe foot er vol</div>;
}

registerBlockType(metadata.name, {
  edit: Edit,
});
