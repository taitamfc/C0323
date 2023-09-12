// import axios from "axios";

class Product {
    constructor(){
        this.api_url = 'https://6083df209b2bed00170404a0.mockapi.io/angular/products';
    }
    
    // getAll(){
    //     axios.get('https://6083df209b2bed00170404a0.mockapi.io/angular/products').then((res) => {
    //         return res;
    //     })
    //     .catch((error) => {
    //         return error;
    //     })
    // }

    all(){
        return new Promise((resolve, reject) => {
            const res = axios.get(this.api_url).then( res => {
                resolve(res)
            }).catch( err => {
                reject(err)    
            })
        })
    }

    async find(id){
        const data = await axios.get(this.api_url + '/' + id);
        return data;
    }

    destroy(id){
        return new Promise((resolve, reject) => {
            const res = axios.delete(this.api_url + '/' + id).then( res => {
                resolve(res)
            }).catch( err => {
                reject(err)    
            })
        })
    }

    update(id,data){
        return new Promise((resolve, reject) => {
            const res = axios.put(this.api_url + '/' + id,data).then( res => {
                resolve(res)
            }).catch( err => {
                reject(err)    
            })
        })
    }

    async store(data){
        try {
            return await axios.post(this.api_url,data)
        } catch (error) {
            return await error;
        }
    }

}

export default new Product();