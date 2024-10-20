import {getRequest} from '../lib/api-request.js';


let itemsData = {};

let fakeItems = [
    {
        img: "url de l'image",
        name: "G2 ESPORTS - ProKit Jacket 2024",
        Price: "120,00",
    },
    {
        img: "url de l'image",
        name: "G2 ESPORTS - ProKit'24 Sleeve",
        Price: "25,00",
    },
    {
        img: "url de l'image",
        name: "G2 ESPORTS - ProKit'24 Pantalon",
        Price: "90,00",
    },
   
]

itemsData.fetch = async function(id){
    let data = await getRequest('products/'+id);
    return data==false ? fakeItems.pop() : [data];
}

itemsData.fetchAll = async function(){
    let data = await getRequest('products');
    return data==false ? fakeItems : data;
}


export {itemsData};