!function(){var e,t={769:function(e,t,o){"use strict";var n=window.wp.blocks,l=window.wp.element,r=window.wp.primitives,c=(0,l.createElement)(r.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,l.createElement)(r.Path,{d:"M7 5.5h10a.5.5 0 01.5.5v12a.5.5 0 01-.5.5H7a.5.5 0 01-.5-.5V6a.5.5 0 01.5-.5zM17 4H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2zm-1 3.75H8v1.5h8v-1.5zM8 11h8v1.5H8V11zm6 3.25H8v1.5h6v-1.5z"})),i=o(184),a=o.n(i),s=window.wp.i18n,m=window.wp.compose,d=window.wp.blockEditor,u=window.wp.data;window.wp.blob;const p={"top left":"is-position-top-left","top center":"is-position-top-center","top right":"is-position-top-right","center left":"is-position-center-left","center center":"is-position-center-center",center:"is-position-center-center","center right":"is-position-center-right","bottom left":"is-position-bottom-left","bottom center":"is-position-bottom-center","bottom right":"is-position-bottom-right"};function v(e){return 50===e||void 0===!e?null:"has-background-dim-"+10*Math.round(e/10)}function b(e){return k(e)?"":p[e]}function k(e){return!e||"center center"===e||"center"===e}var h=window.wp.components,g=(0,l.createElement)(r.SVG,{viewBox:"0 0 24 24",xmlns:"http://www.w3.org/2000/svg"},(0,l.createElement)(r.Path,{d:"M12 4c-4.4 0-8 3.6-8 8v.1c0 4.1 3.2 7.5 7.2 7.9h.8c4.4 0 8-3.6 8-8s-3.6-8-8-8zm0 15V5c3.9 0 7 3.1 7 7s-3.1 7-7 7z"})),C=(0,l.createElement)(r.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,l.createElement)(r.Path,{d:"M18 5.5H6a.5.5 0 00-.5.5v3h13V6a.5.5 0 00-.5-.5zm.5 5H10v8h8a.5.5 0 00.5-.5v-7.5zm-10 0h-3V18a.5.5 0 00.5.5h2.5v-8zM6 4h12a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2z"})),w=window.wp.viewport,_=(0,l.createElement)(r.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,l.createElement)(r.Path,{d:"M10.8622 8.04053L14.2805 12.0286L10.8622 16.0167L9.72327 15.0405L12.3049 12.0286L9.72327 9.01672L10.8622 8.04053Z"})),E=(0,l.createElement)(r.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,l.createElement)(r.Path,{d:"M11.6 7l-1.1-1L5 12l5.5 6 1.1-1L7 12l4.6-5zm6 0l-1.1-1-5.5 6 5.5 6 1.1-1-4.6-5 4.6-5z"})),y=(0,l.createElement)(r.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,l.createElement)(r.Path,{d:"M6.6 6L5.4 7l4.5 5-4.5 5 1.1 1 5.5-6-5.4-6zm6 0l-1.1 1 4.5 5-4.5 5 1.1 1 5.5-6-5.5-6z"})),B=(0,l.createElement)(r.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,l.createElement)(r.Path,{d:"M2 12C2 6.44444 6.44444 2 12 2C17.5556 2 22 6.44444 22 12C22 17.5556 17.5556 22 12 22C6.44444 22 2 17.5556 2 12ZM13 11V7H11V11H7V13H11V17H13V13H17V11H13Z"})),x=(0,l.createElement)(r.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,l.createElement)(r.Path,{d:"M20.5 16h-.7V8c0-1.1-.9-2-2-2H6.2c-1.1 0-2 .9-2 2v8h-.7c-.8 0-1.5.7-1.5 1.5h20c0-.8-.7-1.5-1.5-1.5zM5.7 8c0-.3.2-.5.5-.5h11.6c.3 0 .5.2.5.5v7.6H5.7V8z"})),f=(0,l.createElement)(r.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,l.createElement)(r.Path,{d:"M17 4H7c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm.5 14c0 .3-.2.5-.5.5H7c-.3 0-.5-.2-.5-.5V6c0-.3.2-.5.5-.5h10c.3 0 .5.2.5.5v12zm-7.5-.5h4V16h-4v1.5z"})),L=(0,l.createElement)(r.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,l.createElement)(r.Path,{d:"M15 4H9c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h6c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm.5 14c0 .3-.2.5-.5.5H9c-.3 0-.5-.2-.5-.5V6c0-.3.2-.5.5-.5h6c.3 0 .5.2.5.5v12zm-4.5-.5h2V16h-2v1.5z"}));const S=()=>(0,l.createElement)("svg",{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 30 30",width:"30",height:"30"},(0,l.createElement)("path",{d:"M24,7H6V6c0-1.105,0.895-2,2-2h19c1.105,0,2,0.895,2,2v14c0,1.105-0.895,2-2,2h-1V9C26,7.895,25.105,7,24,7z"}),(0,l.createElement)("path",{d:"M22,9H3c-1.105,0-2,0.895-2,2v13c0,1.105,0.895,2,2,2h19c1.105,0,2-0.895,2-2V11C24,9.895,23.105,9,22,9z M16,19h-3v3  c0,0.552-0.448,1-1,1h0c-0.552,0-1-0.448-1-1v-3H8c-0.552,0-1-0.448-1-1v0c0-0.552,0.448-1,1-1h3v-3c0-0.552,0.448-1,1-1h0  c0.552,0,1,0.448,1,1v3h3c0.552,0,1,0.448,1,1v0C17,18.552,16.552,19,16,19z"})),N=()=>(0,l.createElement)("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",version:"1.1"},(0,l.createElement)("path",{d:"M 10.144531 0.269531 C 9.484375 0.386719 8.972656 0.660156 8.460938 1.175781 C 8.011719 1.621094 7.792969 2.027344 7.644531 2.664062 C 7.59375 2.894531 7.542969 3.105469 7.535156 3.140625 C 7.519531 3.175781 7.171875 3.191406 6.265625 3.195312 C 5.492188 3.195312 4.917969 3.21875 4.785156 3.25 C 4.660156 3.277344 4.367188 3.394531 4.128906 3.511719 C 3.574219 3.78125 3.199219 4.128906 2.984375 4.578125 L 2.835938 4.898438 L 2.820312 6.316406 C 2.808594 7.71875 2.808594 7.742188 2.914062 7.941406 C 3.074219 8.246094 3.238281 8.316406 3.820312 8.316406 C 4.175781 8.316406 4.300781 8.332031 4.300781 8.375 C 4.300781 8.621094 5.332031 21.179688 5.371094 21.347656 C 5.585938 22.394531 6.339844 23.238281 7.394531 23.609375 L 7.765625 23.738281 L 12.273438 23.753906 C 16.671875 23.769531 16.792969 23.761719 17.160156 23.671875 C 17.746094 23.527344 18.085938 23.332031 18.542969 22.878906 C 18.871094 22.554688 18.980469 22.414062 19.132812 22.089844 C 19.234375 21.871094 19.339844 21.585938 19.371094 21.460938 C 19.421875 21.226562 19.503906 19.132812 19.71875 12.738281 C 19.785156 10.828125 19.847656 9.058594 19.867188 8.792969 L 19.894531 8.316406 L 20.273438 8.316406 C 20.71875 8.316406 20.921875 8.238281 21.085938 7.992188 C 21.191406 7.832031 21.191406 7.832031 21.179688 6.339844 L 21.164062 4.851562 L 21.011719 4.539062 C 20.824219 4.160156 20.40625 3.753906 19.949219 3.515625 C 19.386719 3.21875 19.238281 3.199219 17.71875 3.195312 L 16.359375 3.191406 L 16.238281 2.699219 C 16.171875 2.421875 16.050781 2.070312 15.972656 1.910156 C 15.609375 1.195312 14.902344 0.609375 14.070312 0.335938 C 13.847656 0.261719 13.605469 0.25 12.09375 0.242188 C 11.148438 0.238281 10.269531 0.246094 10.144531 0.269531 Z M 13.753906 1.796875 C 14.054688 1.90625 14.367188 2.132812 14.515625 2.359375 C 14.648438 2.558594 14.832031 3.136719 14.777344 3.171875 C 14.722656 3.203125 9.046875 3.195312 9.027344 3.164062 C 9.019531 3.144531 9.085938 2.96875 9.183594 2.765625 C 9.390625 2.328125 9.667969 2.035156 10.042969 1.851562 L 10.316406 1.710938 L 11.925781 1.710938 C 13.324219 1.714844 13.5625 1.726562 13.753906 1.796875 Z M 19.1875 4.761719 C 19.304688 4.8125 19.476562 4.933594 19.574219 5.023438 L 19.746094 5.191406 L 19.738281 6.019531 L 19.722656 6.851562 L 12.015625 6.867188 L 4.300781 6.875 L 4.300781 5.164062 L 4.445312 5.042969 C 4.621094 4.894531 4.820312 4.785156 5.066406 4.707031 C 5.21875 4.660156 6.671875 4.652344 12.117188 4.65625 C 18.964844 4.664062 18.976562 4.664062 19.1875 4.761719 Z M 7.789062 8.40625 C 7.757812 8.472656 7.816406 10.324219 8 14.652344 C 8.136719 18.042969 8.269531 20.878906 8.277344 20.960938 C 8.316406 21.167969 8.605469 21.460938 8.835938 21.527344 C 9.195312 21.625 9.59375 21.394531 9.691406 21.042969 C 9.71875 20.933594 9.65625 18.992188 9.488281 14.914062 C 9.347656 11.628906 9.230469 8.824219 9.222656 8.675781 L 9.207031 8.410156 L 11.652344 8.410156 L 11.652344 14.746094 C 11.652344 20.691406 11.65625 21.097656 11.734375 21.246094 C 11.851562 21.480469 12.027344 21.589844 12.316406 21.613281 C 12.59375 21.636719 12.761719 21.574219 12.953125 21.367188 L 13.070312 21.242188 L 13.085938 14.828125 L 13.09375 8.410156 L 15.464844 8.410156 L 15.417969 8.511719 C 15.394531 8.574219 15.34375 9.5 15.304688 10.574219 C 15.261719 11.648438 15.144531 14.414062 15.050781 16.710938 C 14.925781 19.589844 14.890625 20.949219 14.917969 21.0625 C 15.046875 21.527344 15.632812 21.703125 16.0625 21.394531 C 16.351562 21.191406 16.328125 21.5 16.605469 14.722656 C 16.75 11.300781 16.851562 8.457031 16.839844 8.40625 C 16.8125 8.324219 16.839844 8.316406 17.570312 8.316406 L 18.332031 8.316406 L 18.3125 9.003906 C 18.304688 9.382812 18.238281 12.246094 18.164062 15.367188 C 18.054688 20.164062 18.019531 21.074219 17.960938 21.246094 C 17.800781 21.683594 17.363281 22.113281 16.953125 22.234375 C 16.847656 22.265625 15.292969 22.273438 12.324219 22.265625 L 7.859375 22.25 L 7.617188 22.125 C 7.269531 21.941406 7.0625 21.746094 6.933594 21.46875 C 6.816406 21.238281 6.796875 21.03125 6.300781 14.945312 C 6.023438 11.492188 5.789062 8.585938 5.789062 8.488281 L 5.789062 8.316406 L 6.8125 8.316406 C 7.8125 8.316406 7.835938 8.320312 7.789062 8.40625 Z M 7.789062 8.40625 "})),M=()=>(0,l.createElement)("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24px",height:"24px",viewBox:"0 0 24 24",version:"1.1",style:{transform:"scale(0.7) translateY(0.5px)"}},(0,l.createElement)("path",{d:"M 23.105469 8.011719 L 19.152344 11.964844 C 18.277344 12.835938 16.863281 12.835938 15.988281 11.964844 L 12.035156 8.011719 C 11.164062 7.136719 11.164062 5.722656 12.035156 4.847656 L 15.988281 0.894531 C 16.863281 0.0234375 18.277344 0.0234375 19.152344 0.894531 L 23.105469 4.847656 C 23.976562 5.722656 23.976562 7.136719 23.105469 8.011719 Z M 21.917969 5.242188 L 18.757812 2.082031 C 18.101562 1.425781 17.039062 1.425781 16.386719 2.082031 L 13.222656 5.242188 C 12.566406 5.898438 12.566406 6.960938 13.222656 7.613281 L 16.386719 10.777344 C 17.039062 11.433594 18.101562 11.433594 18.757812 10.777344 L 21.917969 7.613281 C 22.574219 6.960938 22.574219 5.898438 21.917969 5.242188 Z M 8.066406 23.761719 L 2.476562 23.761719 C 1.242188 23.761719 0.238281 22.757812 0.238281 21.523438 L 0.238281 15.933594 C 0.238281 14.699219 1.242188 13.695312 2.476562 13.695312 L 8.066406 13.695312 C 9.300781 13.695312 10.304688 14.699219 10.304688 15.933594 L 10.304688 21.523438 C 10.304688 22.757812 9.300781 23.761719 8.066406 23.761719 Z M 8.066406 11.460938 L 2.476562 11.460938 C 1.242188 11.460938 0.238281 10.460938 0.238281 9.222656 L 0.238281 3.632812 C 0.238281 2.398438 1.242188 1.398438 2.476562 1.398438 L 8.066406 1.398438 C 9.300781 1.398438 10.304688 2.398438 10.304688 3.632812 L 10.304688 9.222656 C 10.304688 10.460938 9.300781 11.460938 8.066406 11.460938 Z M 14.773438 13.695312 L 20.363281 13.695312 C 21.601562 13.695312 22.601562 14.699219 22.601562 15.933594 L 22.601562 21.523438 C 22.601562 22.757812 21.601562 23.761719 20.363281 23.761719 L 14.773438 23.761719 C 13.539062 23.761719 12.539062 22.757812 12.539062 21.523438 L 12.539062 15.933594 C 12.539062 14.699219 13.539062 13.695312 14.773438 13.695312 Z M 14.773438 13.695312 "}));var P=e=>{let{deviceType:t,parents:o,blockName:r,setAttributes:c,clientId:i,siblings:a}=e;const{isViewportMatch:m}=(0,u.select)(w.store),d=m("< medium"),p=!(d||!m("medium")||!m("< large")),v=!!(t&&"Desktop"===t&&(d||p)||t&&"Tablet"===t&&d),b=o&&o.length?o.map((e=>{const t=(0,u.select)("core/block-editor").getBlock(e),{name:o,attributes:l}=t;return l.blockName?l.blockName:(0,n.getBlockType)(o).title})):[],k=(0,u.select)("core/block-editor").getPreviousBlockClientId(),g=(0,u.select)("core/block-editor").getNextBlockClientId(),{name:C}=(0,u.select)("core/block-editor").getBlock(i),{visibility:M}=(0,u.select)("core/block-editor").getBlockAttributes(i);function P(e){wp.data.dispatch("core/edit-post").__experimentalSetPreviewDeviceType(e)}const V=(0,l.useRef)(),[I,z]=(0,l.useState)(!1);var T,H;return T=V,H=()=>z(!1),(0,l.useEffect)((()=>{function e(e){T.current&&!T.current.contains(e.target)&&H()}return document.addEventListener("mousedown",e),()=>{document.removeEventListener("mousedown",e)}}),[T]),(0,l.createElement)(l.Fragment,null,v?(0,l.createElement)("div",{className:"mp__sidebar-notice"},(0,l.createElement)("p",null,(0,s.__)("Changes may not be visible.")),(0,l.createElement)("p",null,(0,s.__)("Try to resize the browser window."))):(0,l.createElement)(l.Fragment,null),(0,l.createElement)("div",{className:"mp__sidebar-header"},(0,l.createElement)("div",{className:"mp__sidebar-header-column"},(0,l.createElement)("div",{className:"mp__sidebar-header-nav-row"},o&&o.length?o.map(((e,t)=>(0,l.createElement)("section",{key:t},(0,l.createElement)(h.Button,{onClick:()=>(0,u.dispatch)("core/block-editor").selectBlock(e)},(0,l.createElement)("p",null,`${b[t]}`)),(0,l.createElement)(h.Icon,{icon:_})))):(0,l.createElement)(l.Fragment,null)),(0,l.createElement)("div",{className:"mp__sidebar-header-row"},(0,l.createElement)(h.Button,{disabled:!k,onClick:()=>{k&&(0,u.dispatch)("core/block-editor").selectBlock(k)},icon:E,label:(0,s.__)("Go to previous block"),isSmall:!0}),(0,l.createElement)(h.__experimentalInputControl,{type:"text",value:r,placeholder:(0,n.getBlockType)(C).title,onChange:e=>c({blockName:e})}),(0,l.createElement)(h.Button,{disabled:!g,onClick:()=>{g&&(0,u.dispatch)("core/block-editor").selectBlock(g)},icon:y,label:(0,s.__)("Go to next block"),isSmall:!0})),(0,l.createElement)("div",{className:"mp__sidebar-header-actions"},(0,l.createElement)("div",null,(0,l.createElement)(h.Button,{className:"hfe__sidebar-control icon",onClick:()=>(0,u.dispatch)("core/block-editor").updateBlockAttributes(i,{visibility:!M}),label:M?(0,s.__)("Hide","monoblock"):(0,s.__)("Show","monoblock"),icon:M?"visibility":"hidden"}),(0,l.createElement)(h.Button,{icon:S,label:(0,s.__)("Duplicate","monoblock"),onClick:()=>(0,u.dispatch)("core/block-editor").duplicateBlocks([i])}),null!=a&&a.length?(0,l.createElement)(l.Fragment,null,(0,l.createElement)(h.Button,{icon:B,label:(0,s.__)("Add block","monoblock"),onClick:()=>z(!I)}),I?(0,l.createElement)(h.Popover,{offset:5,ref:V,placement:"bottom"},(0,l.createElement)("div",{className:"mb__small-insert-popover"},a.map(((e,t)=>{const r=(0,n.getBlockType)(e),{title:c,icon:a}=r,s=o[o.length-1];return(0,l.createElement)(h.Button,{key:t,icon:a.src,label:c,onClick:()=>function(e,t){let o=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{};const l=(0,n.createBlock)(e,o),r=(0,u.select)("core/block-editor").getBlockIndex(i)+1;(0,u.dispatch)("core/block-editor").insertBlock(l,r,t)}(e,s,{})})})))):(0,l.createElement)(l.Fragment,null)):(0,l.createElement)(l.Fragment,null),(0,l.createElement)(h.Button,{icon:N,label:(0,s.__)("Remove","monoblock"),onClick:()=>{(0,u.dispatch)("core/block-editor").removeBlock(i);const e=null!=k?k:o[o.length-1];e&&(0,u.dispatch)("core/block-editor").selectBlock(e)}})),(0,l.createElement)(h.__experimentalDivider,{margin:"2",orientation:"vertical"}),(0,l.createElement)("div",null,(0,l.createElement)(h.Button,{icon:x,isPressed:"Desktop"===t,onClick:()=>P("Desktop"),isSmall:!0}),(0,l.createElement)(h.Button,{icon:f,isPressed:"Tablet"===t,onClick:()=>P("Tablet"),isSmall:!0}),(0,l.createElement)(h.Button,{icon:L,isPressed:"Mobile"===t,onClick:()=>P("Mobile"),isSmall:!0}))))))};const V=(e,t,o)=>{const n=e["monoblock/userSelectedColors"],l=e["monoblock/id"];if(n&&n.length){const e=n.filter((e=>e.color===t)),r=e.length?e[0]:null;o((r?`var(--mb${l?`--${l}`:""}--custom--color--${r.id}, #000000)`:"")||t)}else o(t)},I=()=>{const e=[],t=wp.data.select("core/block-editor").getSettings().__experimentalFeatures.color.palette;return t&&"object"==typeof t&&(t.custom&&e.push({colors:t.custom,name:"Custom"}),t.theme&&e.push({colors:t.theme,name:"Theme"}),t.default&&e.push({colors:t.default,name:"Default"})),e},z=()=>{const e=[],t=wp.data.select("core/block-editor").getSettings().__experimentalFeatures.color.gradients;return t&&"object"==typeof t&&(t.custom&&e.push({gradients:t.custom,name:"Custom"}),t.default&&e.push({gradients:t.default,name:"Default"})),e};var T=(0,l.createElement)(r.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,l.createElement)(r.Path,{d:"M18 11.2h-5.2V6h-1.6v5.2H6v1.6h5.2V18h1.6v-5.2H18z"})),H=e=>{let{clientId:t,index:o,block:r,last:c}=e;const{clientId:i,name:a,attributes:m}=r,d=(0,n.getBlockType)(a),{title:p,icon:v,category:b}=d,{blockName:k,visibility:g}=m,C=!("monoblock"!==b);return(0,l.createElement)("div",{key:o,keyProp:`testKey${o}`,className:"mb__sidebar-mask-item",onMouseEnter:()=>(0,u.dispatch)("core/block-editor").toggleBlockHighlight(i,!0),onMouseLeave:()=>(0,u.dispatch)("core/block-editor").toggleBlockHighlight(i,!1)},(0,l.createElement)(h.Button,{index:o,className:"mb__sidebar-btn",icon:v.src,onClick:()=>{(0,u.dispatch)("core/block-editor").selectBlock(i)}},(0,l.createElement)("p",null,`${k||p}`)),(0,l.createElement)("div",{className:"mb__sidebar-btns"},(0,l.createElement)(h.Button,{className:"mb__sidebar-btn mask-options",onClick:()=>{var e,n,l,r,a,s;o<c&&(null===(e=document)||void 0===e||null===(n=e.querySelectorAll(`[keyProp="testKey${o}"]`)[0])||void 0===n||null===(l=n.classList)||void 0===l||l.add("transition-down"),null===(r=document)||void 0===r||null===(a=r.querySelectorAll(`[keyProp="testKey${o+1}"]`)[0])||void 0===a||null===(s=a.classList)||void 0===s||s.add("transition-up"),setTimeout((()=>{var e,n,l,r,c,a;null===(e=document)||void 0===e||null===(n=e.querySelectorAll(`[keyProp="testKey${o}"]`)[0])||void 0===n||null===(l=n.classList)||void 0===l||l.remove("transition-down"),null===(r=document)||void 0===r||null===(c=r.querySelectorAll(`[keyProp="testKey${o+1}"]`)[0])||void 0===c||null===(a=c.classList)||void 0===a||a.remove("transition-up"),(0,u.dispatch)("core/block-editor").moveBlocksDown([i],t)}),150))},label:(0,s.__)("Move Down","monoblock"),icon:"arrow-down-alt2",disabled:o>=c}),(0,l.createElement)(h.Button,{className:"mb__sidebar-btn mask-options",onClick:()=>{var e,n,l,r,c,a;o&&(null===(e=document)||void 0===e||null===(n=e.querySelectorAll(`[keyProp="testKey${o-1}"]`)[0])||void 0===n||null===(l=n.classList)||void 0===l||l.add("transition-down"),null===(r=document)||void 0===r||null===(c=r.querySelectorAll(`[keyProp="testKey${o}"]`)[0])||void 0===c||null===(a=c.classList)||void 0===a||a.add("transition-up"),setTimeout((()=>{var e,n,l,r,c,a;null===(e=document)||void 0===e||null===(n=e.querySelectorAll(`[keyProp="testKey${o-1}"]`)[0])||void 0===n||null===(l=n.classList)||void 0===l||l.remove("transition-down"),null===(r=document)||void 0===r||null===(c=r.querySelectorAll(`[keyProp="testKey${o}"]`)[0])||void 0===c||null===(a=c.classList)||void 0===a||a.remove("transition-up"),(0,u.dispatch)("core/block-editor").moveBlocksUp([i],t)}),100))},label:(0,s.__)("Move Up","monoblock"),icon:"arrow-up-alt2",disabled:!o}),(0,l.createElement)(h.Button,{className:"mb__sidebar-btn mask-options remove",icon:N,onClick:()=>{(0,u.dispatch)("core/block-editor").removeBlock(i),(0,u.dispatch)("core/block-editor").selectBlock(t)}}),C?(0,l.createElement)(h.Button,{className:"mb__sidebar-btn mask-options"+(g?"":" visible"),onClick:()=>{(0,u.dispatch)("core/block-editor").updateBlockAttributes(i,{visibility:!g})},label:g?(0,s.__)("Hide","monoblock"):(0,s.__)("Show","monoblock"),icon:g?"visibility":"hidden"}):(0,l.createElement)(l.Fragment,null)))},G=e=>{let{innerBlocks:t,parentId:o}=e;return(0,l.createElement)(l.Fragment,null,(0,l.createElement)(h.PanelRow,{className:"mb__sidebar-structure"},t&&t.length?t.map(((e,n)=>(0,l.createElement)(H,{key:n,block:e,index:n,last:t.length-1,clientId:o}))):"",(0,l.createElement)(h.Button,{className:"mb__sidebar-btn outline mc-sb",icon:T,onClick:()=>{(0,u.dispatch)("core/edit-post").setIsInserterOpened({rootClientId:o,insertionIndex:1})}},(0,s.__)("Add Block","monoblock"))))};const A=e=>e.split("--").pop().slice(0,-1).split(", ")[0];function O(e){let{attributes:t,setAttributes:o,clientId:n,deviceType:r,parents:c,overlayColor:i,textColor:a,setOverlayColor:m,setTextColor:u,context:p,innerBlocks:v}=e;const{dimRatio:b,blockName:k,container:w,containerWidth:_}=t,[E,y]=(0,l.useState)(1);let B=[];B=1===E?[" active"," next",""]:2===E?[" prev"," active"," next"]:[""," prev"," active"];const{gradientValue:x,setGradient:f}=(0,d.__experimentalUseGradient)(),L=p["monoblock/userSelectedColors"],S=p["monoblock/userSelectedGradients"];p["monoblock/id"];let N=i.color;if(N&&N.includes("var")){const e=L.find((e=>e.id===A(N)));N=e?e.color:void 0}let T=x;if(T&&T.includes("var")){const e=S.find((e=>e.id===A(T)));T=e?e.gradient:void 0}let H=a.color;if(H&&H.toString().includes("var")){const e=L.find((e=>e.id===A(H)));H=e?e.color:void 0}return(0,l.createElement)(l.Fragment,null,(0,l.createElement)(d.InspectorControls,null,(0,l.createElement)(P,{deviceType:r,parents:c,blockName:k,setAttributes:o,clientId:n,siblings:["iori/monobase","iori/monolayer"]}),(0,l.createElement)(h.Flex,{className:"mc--sidebar--tabs"},(0,l.createElement)(h.FlexItem,{className:`mc--sidebar--tab${B[0]}`},(0,l.createElement)(h.Button,{text:(0,s.__)("Content"),icon:M,onClick:()=>y(1),size:20})),(0,l.createElement)(h.FlexItem,{className:`mc--sidebar--tab${B[1]}`},(0,l.createElement)(h.Button,{text:(0,s.__)("Styles"),icon:g,onClick:()=>y(2),size:20})),(0,l.createElement)(h.FlexItem,{className:`mc--sidebar--tab${B[2]}`},(0,l.createElement)(h.Button,{text:(0,s.__)("Layout"),icon:C,onClick:()=>y(3),size:20})))),(0,l.createElement)(d.InspectorControls,null,1===E?(0,l.createElement)(h.Card,{className:"mc__nav-card"},(0,l.createElement)(G,{innerBlocks:v,parentId:n})):"",2===E?(0,l.createElement)(h.Card,{className:"mc__nav-card"},(0,l.createElement)(h.PanelRow,{className:"mp__sidebar-color-selector"},(0,l.createElement)(d.__experimentalPanelColorGradientSettings,{__experimentalHasMultipleOrigins:!0,__experimentalIsRenderedInSidebar:!0,enableAlpha:!0,settings:[{colorValue:H,onColorChange:e=>{V(p,e,u)},label:(0,s.__)("Text Color")},{colorValue:N,gradientValue:T,onColorChange:e=>{V(p,e,m)},onGradientChange:e=>{((e,t,o)=>{const n=e["monoblock/userSelectedGradients"],l=e["monoblock/id"];if(n&&n.length){const e=n.filter((e=>e.gradient===t)),r=e.length?e[0]:null;o((r?`var(--mb${l?`--${l}`:""}--custom--gradient--${r.id}, linear-gradient(0deg, rgb(0, 0, 0) 0%, rgb(0, 0, 0) 100%))`:"")||t)}else o(t)})(p,e,f)},label:(0,s.__)("Background Color")}],colors:($=L,$&&$.length?[{colors:$,name:(0,s.__)("Monoblock","monoblock")},...I()]:[...I()]),gradients:(O=S,O&&O.length?[{gradients:O,name:(0,s.__)("Monoblock","monoblock")},...z()]:[...z()])})),(0,l.createElement)(h.PanelRow,{className:"ml__opacity-ctrl-panel"},(0,l.createElement)(h.RangeControl,{label:(0,s.__)("Opacity"),value:b,onChange:e=>o({dimRatio:e}),min:0,max:100,step:5,required:!0}))):"",3===E?(0,l.createElement)(h.Card,{className:"mc__nav-card"},(0,l.createElement)(h.__experimentalToggleGroupControl,{value:w,onChange:e=>o({container:e})},(0,l.createElement)(h.__experimentalToggleGroupControlOption,{value:!1,label:"Full width"}),(0,l.createElement)(h.__experimentalToggleGroupControlOption,{value:!0,label:"Container"})),w?(0,l.createElement)(h.__experimentalInputControl,{label:(0,s.__)("Container width","monoblock"),placeholder:"1200",value:_,onChange:e=>o({containerWidth:+e}),type:"number",__unstableInputWidth:"100px"}):(0,l.createElement)(l.Fragment,null)):""));var O,$}function $(e){let{attributes:t,setAttributes:o}=e;return(0,l.createElement)(l.Fragment,null,(0,l.createElement)(d.BlockControls,{group:"other"},(0,l.createElement)(d.__experimentalBlockAlignmentMatrixControl,{label:(0,s.__)("Change content position"),value:t.contentPosition,onChange:e=>o({contentPosition:e})})))}var F=(0,m.compose)([(0,d.withColors)({overlayColor:"background-color",textColor:"color"})])((e=>{var t;const{attributes:o,clientId:n,isSelected:r,setAttributes:c,overlayColor:i,textColor:m,setOverlayColor:p,setTextColor:h,context:g}=e,{dimRatio:C,blockName:w,visibility:_,contentPosition:E,container:y,containerWidth:B,customTextColor:x,customOverlayColor:f}=o,L=(0,l.useRef)(),{innerBlocks:S,multiBlocksSelection:N,deviceType:M,parents:P,templateLock:V,blockJustInserted:I,parentBlock:z,blockEditorGetBlock:T,previousBlockClientId:H}=(0,u.useSelect)((e=>{var t;const{getBlock:o,getBlockParents:l,getMultiSelectedBlockClientIds:r,getBlockName:c,getBlockHierarchyRootClientId:i,getTemplateLock:a,wasBlockJustInserted:s,getBlocksByClientId:m,getPreviousBlockClientId:u}=e(d.store),p=i(n),v=l(n),b=v.length?v[v.length-1]:null,k=r();return{templateLock:!(!p||!a(p))&&"contentOnly"===a(p),innerBlocks:null===(t=o(n))||void 0===t?void 0:t.innerBlocks,parents:v,parentBlock:m(b)[0],multiBlocksSelection:k.length&&k.every((e=>"iori/monolayer"===c(e))),deviceType:e("core/edit-post").__experimentalGetPreviewDeviceType(),blockJustInserted:s,blockEditorGetBlock:o,previousBlockClientId:u()}}),[n]);(0,l.useEffect)((()=>{if(I(n)){const e=z?z.innerBlocks.filter((e=>{let{name:t}=e;return"iori/monolayer"===t||"iori/monobase"===t})).length:0,t=H?T(H):void 0;(!w||t&&w===t.attributes.blockName)&&c({blockName:`Layer ${e}`})}else w||c({blockName:"Layer 1"})}),[]);const G=(e=>[["core/paragraph",{align:"center",placeholder:(0,s.__)("Write title…"),...e}]])({fontSize:null!==(t=(0,d.useSetting)("typography.fontSizes"))&&void 0!==t&&t.length?"large":void 0}),A=(0,d.useInnerBlocksProps)({},{template:S.length?void 0:G,templateInsertUpdatesSelection:!0,allowedBlocks:wp.blocks.getBlockTypes().length?wp.blocks.getBlockTypes().map((e=>"iori/monolayer"!==e.name&&"iori/monoblock"!==e.name&&"iori/monobase"!==e.name&&"iori/monotext"!==e.name&&"iori/monocontent"!==e.name&&"iori/monopicture"!==e.name&&"iori/monocontainer"!==e.name&&"core/pattern"!==e.name&&"core/column"!==e.name&&"core/cover"!==e.name&&"core/group"!==e.name?e.name:"")):[]}),{gradientClass:F,gradientValue:R}=(0,d.__experimentalUseGradient)(),Z=(0,d.useBlockProps)({ref:L,className:a()(v(C),i.class,m.class,{mbhidden:!_,"has-background-dim":0!==C,"has-background-gradient":R,[F]:F,"has-custom-content-position":!k(E)}),style:{background:!F&&R?R:void 0,backgroundColor:!i.class&&f?f:void 0,color:!m.class&&x?x:void 0}});return(0,l.createElement)(l.Fragment,null,!N&&(0,l.createElement)(l.Fragment,null,(0,l.createElement)($,{attributes:o,setAttributes:c}),(0,l.createElement)(O,{attributes:o,setAttributes:c,clientId:n,innerBlocks:S,deviceType:M,parents:P,overlayColor:i,textColor:m,setTextColor:h,setOverlayColor:p,context:g})),(0,l.createElement)("div",Z,(0,l.createElement)("div",{className:a()("monobase-container",b(E)),style:{"max-width":y&&B?B+"px":"initial"}},(0,l.createElement)("div",A)),r?(0,l.createElement)(d.InnerBlocks.ButtonBlockAppender,null):""))}));(0,n.registerBlockType)("iori/monobase",{title:"Standard",icon:c,save:function(e){let{attributes:t}=e;const{dimRatio:o,visibility:n,contentPosition:r,container:c,containerWidth:i,overlayColor:s,textColor:m,customTextColor:u,customOverlayColor:p,gradient:h,customGradient:g}=t,C=(0,d.__experimentalGetGradientClass)(h),w=(0,d.getColorClassName)("background-color",s),_=(0,d.getColorClassName)("color",m),E=d.useBlockProps.save({className:a()("monobase-front",v(o),w,_,{mbhidden:!n,"has-background-dim":0!==o,"has-background-gradient":h||g,[C]:C,"has-custom-content-position":!k(r)}),style:{backgroundColor:!w&&p?p:void 0,color:!_&&u?u:void 0,background:null!=g?g:void 0}});return(0,l.createElement)("div",E,(0,l.createElement)("div",{className:a()("monobase-container",b(r)),style:{"max-width":c&&i?i+"px":"initial"}},(0,l.createElement)("div",d.useInnerBlocksProps.save({className:a()("wp-block-iori-monoblock__inner-container")}))))},edit:F})},184:function(e,t){var o;!function(){"use strict";var n={}.hasOwnProperty;function l(){for(var e=[],t=0;t<arguments.length;t++){var o=arguments[t];if(o){var r=typeof o;if("string"===r||"number"===r)e.push(o);else if(Array.isArray(o)){if(o.length){var c=l.apply(null,o);c&&e.push(c)}}else if("object"===r)if(o.toString===Object.prototype.toString)for(var i in o)n.call(o,i)&&o[i]&&e.push(i);else e.push(o.toString())}}return e.join(" ")}e.exports?(l.default=l,e.exports=l):void 0===(o=function(){return l}.apply(t,[]))||(e.exports=o)}()}},o={};function n(e){var l=o[e];if(void 0!==l)return l.exports;var r=o[e]={exports:{}};return t[e](r,r.exports,n),r.exports}n.m=t,e=[],n.O=function(t,o,l,r){if(!o){var c=1/0;for(m=0;m<e.length;m++){o=e[m][0],l=e[m][1],r=e[m][2];for(var i=!0,a=0;a<o.length;a++)(!1&r||c>=r)&&Object.keys(n.O).every((function(e){return n.O[e](o[a])}))?o.splice(a--,1):(i=!1,r<c&&(c=r));if(i){e.splice(m--,1);var s=l();void 0!==s&&(t=s)}}return t}r=r||0;for(var m=e.length;m>0&&e[m-1][2]>r;m--)e[m]=e[m-1];e[m]=[o,l,r]},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,{a:t}),t},n.d=function(e,t){for(var o in t)n.o(t,o)&&!n.o(e,o)&&Object.defineProperty(e,o,{enumerable:!0,get:t[o]})},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},function(){var e={194:0,806:0};n.O.j=function(t){return 0===e[t]};var t=function(t,o){var l,r,c=o[0],i=o[1],a=o[2],s=0;if(c.some((function(t){return 0!==e[t]}))){for(l in i)n.o(i,l)&&(n.m[l]=i[l]);if(a)var m=a(n)}for(t&&t(o);s<c.length;s++)r=c[s],n.o(e,r)&&e[r]&&e[r][0](),e[r]=0;return n.O(m)},o=self.webpackChunkmonoblock=self.webpackChunkmonoblock||[];o.forEach(t.bind(null,0)),o.push=t.bind(null,o.push.bind(o))}();var l=n.O(void 0,[806],(function(){return n(769)}));l=n.O(l)}();