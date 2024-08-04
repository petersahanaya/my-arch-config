import { todoSchema, TodoType } from "@/utils/schemas/init.schema";
import axios from "axios";

export const api = axios.create({
    baseURL: new URL("https://localhost:3000/api").origin,
});

type TodoApi = {
    todos: TodoType[];
};

const getTodo = async () => {
    const { todos: rawTodos } = await api.get<TodoApi>("/todo");

    const todos = todoSchema.array().safeParse(rawTodos);
};
