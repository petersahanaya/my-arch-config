import { createServer, Response } from "miragejs";

const todos = [
    {
        id: crypto.randomUUID(),
        title: "Learn math",
        status: "in progress" as const,
    },
    {
        id: crypto.randomUUID(),
        title: "Coding",
        status: "urgent" as const,
    },
    {
        id: crypto.randomUUID(),
        title: "Cook",
        status: "completed" as const,
    },
];

export default function () {
    createServer({
        routes() {
            this.get("/api/todo", () => {
                return new Response(200, {}, { todos });
            });
            this.post("/api/todo", (_, request) => {
                const todo = JSON.parse(request.requestBody);

                todos.push(todo);

                return "ok";
            });
        },
    });
}
