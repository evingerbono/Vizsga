import DataService from "../Model/DataService.js"
import Model from "../Model/Model.js"
import SzavakView from "../View/SzavakView.js"
class Controller{
    constructor(){
        this.dataService = new DataService();
        this.megjelenitSzavak();
    }
    async megjelenitSzavak(){
        await this.dataService.getData("api/szavak",(adatok)=>{
            const model = new Model(adatok);
            new SzavakView(model.getAdat(),".szavak")
        });
    }
}
export default Controller;