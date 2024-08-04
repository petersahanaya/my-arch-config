import { todoSchema, TodoType } from "@/utils/schemas/init.schema";
import axios from "axios";

export const api = axios.create({
    baseURL: new URL("https://localhost:3000/api").origin,
});

type TodoApiResponse = {
    todos: TodoType[];
};

export const getTodo = async () => {
    const { todos: rawTodos } = (await api.get("/todo")) as TodoApiResponse;

    const todos = todoSchema.array().safeParse(rawTodos);

    if (!todos.success)
        throw new Error("Error : todo doesn't same as the schema.");

    return todos.data;
};
