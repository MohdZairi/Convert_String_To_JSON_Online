const obj = '{"member":[]}';
const json = JSON.parse(obj);

function convertToJSON(){
	const name = document.getElementById('name');
	const matric = document.getElementById('matric');
	const address = document.getElementById('address');
	
	if(name.value == "" )
    {
		alert("Please Enter Your Name!");
    }
	else if(matric.value == "")
    {
        alert("Please Enter Your Matric Number!");
    }
    else if(address.value == "")
    {
        alert("Please Enter Your Address!");
    }
    else{
		const str = '{"Name": "'+name.value+'", "Matric Number": "'+matric.value+'", "Address": "'+address.value+'"}';
		json['member'].push(str);
		const decode = JSON.stringify(json, null, ' ');
		const rpl = decode.replace(/\\/g, '');
		document.getElementById('result').innerHTML = "<pre>"+rpl+"</pre>";
		firstname.value = "";
		lastname.value = "";
		address.value = "";
	}
}