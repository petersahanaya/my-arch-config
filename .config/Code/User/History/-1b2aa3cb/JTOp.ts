import { TodoType } from "@utils/schemas/init.schema";
import { createServer, Response } from "miragejs";

const todos = [
    {
        id: crypto.randomUUID(),
        title: "Learn math",
        status: "in progress" as const,
        category: "study",
        createdAt: new Date().toString(),
        updatedAt: new Date().toString(),
    },
    {
        id: crypto.randomUUID(),
        title: "Coding",
        status: "urgent" as const,
        category: "coding",
        createdAt: new Date().toString(),
        updatedAt: new Date().toString(),
    },
    {
        id: crypto.randomUUID(),
        title: "Cook",
        status: "completed" as const,
        category: "cooking",
        createdAt: new Date().toString(),
        updatedAt: new Date().toString(),
    },
] satisfies Array<TodoType>;

export default function () {
    createServer({
        routes() {
            this.urlPrefix = "http://localhost:3000";
            this.get("/api/todo", () => {
                return new Response(200, {}, { todos });
            });
            this.post("/api/todo", (_, request) => {
                const todo = JSON.parse(request.requestBody);

                todos.push(todo);

                return new Response(201);
            });
        },
    });
}
