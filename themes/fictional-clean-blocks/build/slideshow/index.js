(()=>{"use strict";const e=window.React,t=window.wp.blockEditor,o=window.wp.blocks,n=JSON.parse('{"UU":"ourblocktheme/slideshow"}');(0,o.registerBlockType)(n.UU,{edit:function(o){const n=(0,t.useBlockProps)();return(0,e.createElement)("div",{...n},(0,e.createElement)("div",{style:{backgroundColor:"#333",padding:"35px"}},(0,e.createElement)("p",{style:{textAlign:"center",fontSize:"20px",color:"#FFF"}},"Slideshow"),(0,e.createElement)(t.InnerBlocks,{allowedBlocks:["ourblocktheme/slide"]})))},save:function(){return(0,e.createElement)(t.InnerBlocks.Content,null)}})})();