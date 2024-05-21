
class DataService {
    constructor() {
      axios.defaults.baseURL = "http://localhost:8000/";
      axios.defaults.withCredentials = true;
      this.token = "";
    }
    async getData(url, dataCallback) {
      console.log(url);
      try {
        const response = await axios.get(url);
        console.log(response);
        dataCallback(response.data);
      } catch (error) {
        console.error("Hiba történt:", error);
      }
    }
}
export default DataService;