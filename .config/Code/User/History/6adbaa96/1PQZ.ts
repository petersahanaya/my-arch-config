import { todoSchema } from "@/utils/schemas/init.schema";
import axios from "axios";

export const api = axios.create({
    baseURL: new URL("https://localhost:3000/api").origin,
});

const getTodo = async () => {
    const { todos: rawTodos } = await api.get("/todo");

    const todos = todoSchema.array().safeParse(rawTodos);
};
