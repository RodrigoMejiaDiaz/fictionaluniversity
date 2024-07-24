(()=>{"use strict";const e=window.React,t=window.wp.blocks,o=JSON.parse('{"UU":"ourblocktheme/genericbutton"}'),n=[{name:"blue",color:"#0d3b66"},{name:"orange",color:"#ee964b"},{name:"dark-orange",color:"#f95738"}],l=window.wp.primitives,r=(0,e.createElement)(l.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,e.createElement)(l.Path,{d:"M10 17.389H8.444A5.194 5.194 0 1 1 8.444 7H10v1.5H8.444a3.694 3.694 0 0 0 0 7.389H10v1.5ZM14 7h1.556a5.194 5.194 0 0 1 0 10.39H14v-1.5h1.556a3.694 3.694 0 0 0 0-7.39H14V7Zm-4.5 6h5v-1.5h-5V13Z"})),a=window.wp.components,i=window.wp.blockEditor,s=window.wp.element;(0,t.registerBlockType)(o.UU,{edit:function(t){const o=(0,i.useBlockProps)(),[l,c]=(0,s.useState)(!1),u=n.filter((e=>e.name==t.attributes.colorName))[0].color;return(0,e.createElement)("div",{...o},(0,e.createElement)(i.BlockControls,null,(0,e.createElement)(a.ToolbarGroup,null,(0,e.createElement)(a.ToolbarButton,{onClick:function(){c((e=>!e))},icon:r})),(0,e.createElement)(a.ToolbarGroup,null,(0,e.createElement)(a.ToolbarButton,{isPressed:"large"===t.attributes.size,onClick:()=>t.setAttributes({size:"large"})},"Large"),(0,e.createElement)(a.ToolbarButton,{isPressed:"medium"===t.attributes.size,onClick:()=>t.setAttributes({size:"medium"})},"Medium"),(0,e.createElement)(a.ToolbarButton,{isPressed:"small"===t.attributes.size,onClick:()=>t.setAttributes({size:"small"})},"Small"))),(0,e.createElement)(i.InspectorControls,null,(0,e.createElement)(a.PanelBody,{title:"Color",initialOpen:!0},(0,e.createElement)(a.PanelRow,null,(0,e.createElement)(a.ColorPalette,{disableCustomColors:!0,clearable:!1,colors:n,value:u,onChange:function(e){const{name:o}=(0,i.getColorObjectByColorValue)(n,e);t.setAttributes({colorName:o})}})))),(0,e.createElement)(i.RichText,{allowedFormats:[],tagName:"a",className:`btn btn--${t.attributes.size} btn--${t.attributes.colorName}`,value:t.attributes.text,onChange:function(e){t.setAttributes({text:e})}}),l&&(0,e.createElement)(a.Popover,{position:"middle center"},(0,e.createElement)(i.__experimentalLinkControl,{settings:[],value:t.attributes.linkObject,onChange:function(e){t.setAttributes({linkObject:e})}}),(0,e.createElement)(a.Button,{variant:"primary",onClick:()=>c(!1),style:{display:"block",width:"100%"}},"Confirm Link")))},save:function(t){return(0,e.createElement)("a",{href:t.attributes.linkObject.url,className:`btn btn--${t.attributes.size} btn--${t.attributes.colorName}`},t.attributes.text)}})})();