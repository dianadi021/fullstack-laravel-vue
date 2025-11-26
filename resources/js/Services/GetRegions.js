import axios from 'axios'

class GetRegions {
  constructor() {}

  async getProvinsi() {
    try {
      const datas = await axios.get('/api/v1/search/regions');
      toastrCustomize("info", "Info!", datas?.data.message);
      
      return datas?.data;
    } catch (error) {
      toastrCustomize("error", "Kesalahan!", error?.response?.data?.message);
    }
  }
}

export default GetRegions;