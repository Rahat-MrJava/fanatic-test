(window.webpackJsonp_neve=window.webpackJsonp_neve||[]).push([[5],{49:function(e,t,n){"use strict";n.r(t);var l=n(9),a=n.n(l),o=n(0),c=n(14),r=n(8),i=n.n(r),s=n(1),u=n.n(s),b=n(20),d=n.n(b),g=n(2),m=n(3),j=Object(c.a)((function(e){var t=e.children;return Object(o.createElement)("div",{className:"items-list"},t)})),p=Object(c.c)((function(){return Object(o.createElement)(m.Tooltip,{text:Object(g.__)("Drag to Reorder","neve")},Object(o.createElement)("button",{"aria-label":Object(g.__)("Drag to Reorder","neve"),className:"handle",onClick:function(e){e.preventDefault()}},Object(o.createElement)(m.Icon,{icon:"menu"})))})),v=function(e){var t=e.label,n=e.slug,l=e.onToggle,a=e.className,c=e.allowsToggle,r=void 0===c||c,s=e.disabled,u=void 0!==s&&s;return Object(o.createElement)("div",{className:i()(["neve-sortable-item",a,{"no-toggle":!r}])},r&&Object(o.createElement)(m.Tooltip,{text:Object(g.__)("Toggle Visibility","neve")},Object(o.createElement)("button",{"aria-label":Object(g.__)("Toggle Visibility","neve"),className:"toggle",onClick:function(e){e.preventDefault(),e.stopPropagation(),l(n)}},Object(o.createElement)(m.Icon,{icon:"visibility"}))),Object(o.createElement)("span",{className:"label"},t),!u&&Object(o.createElement)(p,null))};v.propTypes={label:u.a.string.isRequired,slug:u.a.string.isRequired,onToggle:u.a.func.isRequired,className:u.a.string,disabled:u.a.bool};var O=Object(c.b)(v),f=function(e){var t=e.onUpdate,n=e.components,l=e.label,c=e.value,r=e.allowsToggle,i=void 0===r||r,s=e.orderHeaderElements,u=Object.keys(n).filter((function(e){return!c.includes(e)})),b=function(e){var n=a()(c);n.includes(e)?n=n.filter((function(t){return t!==e})):n.push(e),t(n)};return Object(o.createElement)(o.Fragment,null,l&&Object(o.createElement)("label",{className:"customize-control-title"},l),Object(o.createElement)(j,{items:c,lockAxis:"y",useDragHandle:!0,onSortEnd:function(e){var n=e.newIndex,l=e.oldIndex,a=d()(c,l,n);t(a)}},c.map((function(e,t){return Object.keys(n).includes(e)&&Object(o.createElement)(O,{key:t,label:n[e],index:t,slug:e,onToggle:b,allowsToggle:i,orderHeaderElements:s})})),u.map((function(e,t){return Object(o.createElement)(v,{className:"disabled",key:t,slug:e,label:n[e],index:t,onToggle:b,allowsToggle:i,disabled:!0})}))))};f.propTypes={onUpdate:u.a.func.isRequired,components:u.a.object.isRequired,label:u.a.string.isRequired,value:u.a.array.isRequired,allowsToggle:u.a.bool},t.default=f}}]);