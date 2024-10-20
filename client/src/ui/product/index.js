import { genericRenderer } from "../../lib/utils.js"; 

// const templateFile = await fetch("src/ui/product/template.html.inc");
// const template = await templateFile.text();


const templateNavbarFile = await fetch("src/ui/product/research.html.inc");
const templateNavbar = await templateNavbarFile.text();

let ProductView = {

    render: function(data){
        let html = "";
        for(let obj of data){
            html += genericRenderer(template, obj);
        }
        return html;
    },

}

let NavbarView = {

    render: function(data){
        let html = "";
        for(let obj of data){
            html += genericRenderer(templateNavbar, obj);
        }
        return html;
    }

    }

export {ProductView};
export {NavbarView};