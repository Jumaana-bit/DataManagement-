const flightsList = document.querySelector("#display-data");
const searchBar = document.getElementById('searchBar');
let city = [];
console.log(searchBar);

//searchBar.addEventListener('keyup', (e) => {
	//const searchString = e.target.value;
	//cityCode.filter(character => {
	//	return flight.getElementById
	//})
//}

const api = 'https://travelpayouts-travelpayouts-flight-data-v1.p.rapidapi.com/v1/prices/cheap?origin=';
const options = {
	method: 'GET',
	headers: {
		'X-Access-Token': '79ef92e03980b6fa09ce07453866bcff',
		'X-RapidAPI-Key': 'f510ce46bbmsh61124120e238c46p10eb24jsnbe5788d0ce27',
		'X-RapidAPI-Host': 'travelpayouts-travelpayouts-flight-data-v1.p.rapidapi.com'
	}
};

var input;
var input2;
function _(x) {
			return document.getElementById(x);
		}

	input = _('searchBar').value;
	input2 = _('searchBar2').value;

const loadFlights = async () => {
	try {
		const url = api + input +'&page=None&currency=CAD&destination='+ input2;  
		const response = await fetch(url, options);
		//const result = await response.text();
		city = await response.json();
		return city
	} catch (err) {
		console.error(err);
	}
}

const displayFlights = async() => 
{
	const flights = await loadFlights();
	let flightDisplay = flights.map((object) => {
		const {airline, price, flight_number, departure_at, return_at} = object;

		return ` 
		<li class="flight">
			<p>${flights.airline}<p>
			<p>${price}</p>
			<p>${flight_number}</p>
			<p>${departure_at}</p>
			<p>${return_at}</p>
		</li> `
	});

	flightsList.innerHTML = flightDisplay;
}

displayFlights();