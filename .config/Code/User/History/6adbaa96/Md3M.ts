import axios from "axios";

export const api = axios.create({
    baseURL: new URL("https://localhost:3000/api").origin,
});

const getTodo = async () => {
    const { todos } = await api.get("/todo");
};
