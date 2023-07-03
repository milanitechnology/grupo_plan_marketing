import http from "../http-common";

class EletroDataService {
  getAll() {
    return http.get("/eletrodomesticos");
  }

  get(id) {
    return http.get(`/eletrodomesticos/${id}`);
  }

  store(data) {
    return http.post("/eletrodomesticos", data);
  }

  update(id, data) {
    return http.put(`/eletrodomesticos/${id}`, data);
  }

  delete(id) {
    return http.delete(`/eletrodomesticos/${id}`);
  }

}

export default new EletroDataService();
