
const items = document.querySelectorAll(".menu-item");
for (const item of items){
	item.classList.add("nav-item");
}

const links=document.querySelectorAll(".nav-item > a");
for(const link of links){
link.classList.add("nav-link")
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
ddlink.classList.add("dropdown-item")
}





/*
function mobileMenuToggle(){
	var mobileMenu = document.querySelector('.main-menu');
	mobileMenu.classList.toggle("mobile-menu");	
}


function mobileMenu(){
	var mobileMenu = document.querySelector('.main-menu');
	setTimeout(function(){
	mobileMenu.classList.toggle("mobile-menu");
	
	},500);
	
}*/