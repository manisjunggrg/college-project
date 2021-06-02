import axios from 'axios';
const url ="http://e-government.bro/api";
const http = axios.create({
    baseURL:url,
    responseType:'json'
})
const getHeaders =(isSecured)=>{
    const token = sessionStorage.getItem("token")
    let object ={
        "Content-Type":"Application/json",
    }
    if(isSecured){
        object={
            "Content-Type":"Application/json",
            "token":token
        }
    }
    return object;
}

const POST =(url, data, isSecured, params={})=>{
    return http.post(url, data,{
        headers: getHeaders(isSecured),
        params
    })
}
const PUT =(url,data,isSecured,params={})=>{
    return http.put(url,data,{
        headers: getHeaders(isSecured),
        params
    })
}

const GET =(url, params={})=>{
    return http.get(url,{
        headers:getHeaders(),
        params
    })
}
const DELETE =(url,isSecured,params={})=>{
    return http.delete(url,{
        headers:getHeaders(isSecured),
        params
    })
}

const UPLOAD =(api,data,files,method)=>{
    return new Promise((resolve,reject)=>{
        let xhr =new XMLHttpRequest();
        let formData = new FormData();

        if(files.length>0){
            files.forEach((item,index)=>{
                formData.append("image",item,item.name)
            })
        }
        for(let key in data){
            formData.append(key,data[key])
        }

        xhr.onreadystatechange=()=>{
            console.log(xhr.readyState)
            if(xhr.readyState===4){
                if(xhr.status===200){
                    resolve(xhr.response)
                }else{
                    reject(xhr.response)
                }
            }
        }

        let token = localStorage.getItem("token")
        xhr.open(method,`${url}${api}`,true);
        xhr.setRequestHeader("x-auth-token",token)
        xhr.send(formData)
    })

}

const fetchData = {
    POST,
    PUT,
    GET,
    DELETE,
    UPLOAD
}

export default fetchData;
