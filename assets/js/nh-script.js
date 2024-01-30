
//Bootstrap class add on menu 
const items = document.querySelectorAll(".menu-item");
for (const item of items){
	item.classList.add("nav-item");
}

const links=document.querySelectorAll(".nav-item > a");
for(const link of links){
link.classList.add("nav-link", "text-success")
}

const dropdowns=document.querySelectorAll(".menu-item-has-children");
for(const dropdown of dropdowns){
	dropdown.classList.add("dropdown");
}

const dts=document.querySelectorAll(".menu-item-has-children > a");
for(const dt of dts){
	dt.classList.add("dropdown-toggle");
	dt.setAttribute("data-bs-toggle", "dropdown");
	dt.setAttribute("id", "navbarDropdownMenuLink");
	dt.setAttribute("role", "button");
}

const ddmenus=document.querySelectorAll(".sub-menu");
for(const ddmenu of ddmenus){
	ddmenu.classList.add("dropdown-menu")
}

const ddlinks=document.querySelectorAll(".dropdown-menu > li > a");
for(const ddlink of ddlinks){
ddlink.classList.add("dropdown-item");
}

//

const carosoulactive = document.querySelector(".carousel-item").classList.add("active");

const carouselImgs=document.querySelectorAll(".carousel-item > img");
for(const carouselImg of carouselImgs){
	carouselImg.setAttribute("width", "100%");
	carouselImg.setAttribute("height","300px");
}
