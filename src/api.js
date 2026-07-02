//get base url from backend
const BASE_URL = 'http://127.0.0.1:8000/api';
function getToken(){
    return localStorage.getItem('token');
}
async function apiFetch(endpoint , options = {}){
    const token = getToken();
    const headers = {
        "Content-Type" : "application/json", //data 
        Accept : "application/json",
        ...(token ? { Authorization: `Bearer ${token}` } : {}),
        ...options.headers,
    }
    const response = await fetch(`${BASE_URL}${endpoint}`, {
        ...options,// method : POST, GET, PUT, DELETE
        headers // 
    });
    const data = await response.json();
    if(!response.ok){
        throw new Error("API request failed"|| data.message);
    }
    return data;
}
export default apiFetch;