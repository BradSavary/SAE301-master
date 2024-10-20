import {getRequest} from '../lib/api-request.js';


let NavbarData = {

};

let fakenavbar = {
    id: 1,
    name: "Marteau",
    price: 10,
    description: "Un marteau",
    image: "https://www.marteau.com"
}

NavbarData.fetch = async function(id){
    let data = await getRequest('products/'+id);
    return data==false ? fakenavbar.pop() : [data];
}

NavbarData.fetchAll = async function(){
    let data = await getRequest('products');
    return data==false ? fakenavbar : data;
}


export {NavbarData};