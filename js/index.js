const radioHandler = (selectorCall, callback)=>{
	document.querySelectorAll(selectorCall).forEach(e=>{e.addEventListener('click', callback)})
};
const spinerRender = ()=>{document.createElement("");}