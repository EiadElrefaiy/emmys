window.onload = function () {
    filterItems( document.querySelector("#" + localStorage.getItem("category")), localStorage.getItem("category"));
    
}

function filterItems(element, category) {
    // Remove the 'active' class from all links
    document.querySelectorAll('.filter-link').forEach(link => {
        link.classList.remove('active');
    });

    // Add the 'active' class to the clicked link
    element.classList.add('active');

    // Implement your filtering logic here using the 'category' parameter
    // For example, you can show/hide elements based on the selected category
    console.log('Filtering items for category:', category);

    // Example: Hide an element with the class 'hidden'
    document.querySelectorAll('.all').forEach(el => {
            el.classList.add('hidden');
        });

    document.querySelectorAll('.' + category).forEach(el => {
            el.classList.remove('hidden');
        });
        localStorage.setItem("category" , category);
}


function getFilter(){
    var e = document.getElementById("exampleDropdown");
    var value = e.options[e.selectedIndex].value;
    if(value == "option1"){
        filterItems(document.getElementById("all_mob"), 'all');
    }
    if(value == "option2"){
        filterItems(document.getElementById("hot-coffee-mob"), 'hot-coffee');
    }
    if(value == "option3"){
        filterItems(document.getElementById("cold-coffee-mob"), 'cold-coffee');
    }
    if(value == "option4"){
        filterItems(document.getElementById("ice-mob"), 'ice');
    }
    if(value == "option5"){
        filterItems(document.getElementById("juices-mob"), 'juices');
    }
    if(value == "option6"){
        filterItems(document.getElementById("kocktail-mob"), 'kocktail');
    }
    if(value == "option7"){
        filterItems(document.getElementById("tea-mob"), 'tea');
    }
    if(value == "option8"){
        filterItems(document.getElementById("sand-hot-mob"), 'sand-hot');
    }
    if(value == "option9"){
        filterItems(document.getElementById("sand-cold-mob"), 'sand-cold');
    }
    if(value == "option10"){
        filterItems(document.getElementById("toast-bread-mob"), 'toast-bread');
    }
    if(value == "option11"){
        filterItems(document.getElementById("breads-mob"), 'breads');
    }
    if(value == "option12"){
        filterItems(document.getElementById("sweets-mob"), 'sweets');
    }
    if(value == "option13"){
        filterItems(document.getElementById("bags-mob"), 'bags');
    }
}


