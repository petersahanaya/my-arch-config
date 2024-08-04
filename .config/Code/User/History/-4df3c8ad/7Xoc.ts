import { NextRequest } from "next/server";

import { TodoType } from "@utils/schemas/init.schema";

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

export default async function GET(request: NextRequest) {
    const { time } = await request.json();

    // return new Promise(() => {
    //     setTimeout(() => {
    return new Response(JSON.stringify({ todos }));
    //     }, time);
    // });
}
