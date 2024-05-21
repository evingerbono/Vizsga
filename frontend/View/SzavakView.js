import TablaSorView from "./TablaSorView.js";
class SzavakView{
    #adat={};
    constructor(adat,szuloElemSelector){
        this.#adat=adat;
        this.szuloElem=$(szuloElemSelector);
        this.tablaMegjelenit();   
    }

    tablaMegjelenit(){
        let txt='<table class="table table-bordered"></table>'
        this.szuloElem.append(txt);
        this.tablaElem= this.szuloElem.children("table");
        this.tablaElem.append("<thead><tr><th>Angol</th><th>Magyar</th><th>Visszajelzés</th></tr></thead>");

        for(const key in this.#adat){
            new TablaSorView(this.#adat[key].this.tablaElem);
        }
    }
}
export default SzavakView;