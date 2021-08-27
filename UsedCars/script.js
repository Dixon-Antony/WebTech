
let set = [];
const products = document.querySelector(".container");

function addCar([img,name,brand,price,location,description]){
	let code=`
		<div class="cars">
			<img class='car-image' src='${img}'>
			<div class='car-content'>
				<h2 class="price">₹${price}</h2>
				<h4 class="brand">${brand}</h4>
				<h5 class="name">${name}</h5>
				<h5 class="location">${location}</h5>
				<p class='description'>${description}</p>
			</div>	
		</div>
	`;

	products.innerHTML+=code;
}

function searchCar(){
	let str = document.getElementById("searchbox").value;
}

let car1=["https://images.unsplash.com/photo-1611401870204-e88adb05ef3b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=889&q=80",
"Skoda Octavia 1.8 Tsi Style Plus AT",
"Skoda",
"13,50,000",
"Chennai",
"Enthusiasts Car."];


let car2=["https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiud9LZkGFqrkAZLgGeawejsI66ZwYEyoKnA&usqp=CAU",
"Renault Duster RxL Diesel",
"Renault",
"6,50,000",
"Coimbatore",
"Monsterous Offroader"];

let car3=["https://images.unsplash.com/photo-1581650107963-3e8c1f48241b?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fGZvcmQlMjBtdXN0YW5nJTIwZ3R8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
"Ford Mustang GT",
"Ford",
"35,50,000",
"Mumbai",
"Muscle Car"];


//set[0]=car1;
//set[1]=car2;
//set[2]=car3;

//addCar(car1);
//addCar(car2);
//addCar(car3);

function userAdd(){
	let name1 = document.getElementById("name1").value;
	let brand1 = document.getElementById("brand1").value;
	let price1 = document.getElementById("price1").value;
	let image1 = document.getElementById("image1").value;
	let description1 = document.getElementById("description1").value;
	let location1 = document.getElementById("location1").value;

	let x = [image1,name1,brand1,price1,location1,description1];
	//set[set.length+1]=x;
	//for(int i=0;i<=set.length;i++){
	//	addCar(set[i]);
	//}
	alert("Your Car has been Added !");
	//window.location="index.html";
	
}