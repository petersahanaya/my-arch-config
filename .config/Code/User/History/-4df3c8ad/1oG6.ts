import { NextResponse } from "next/server";

import { TodoType } from "@utils/schemas/init.schema";

const todos = [
    {
        id: crypto.randomUUID(),
        title: "Learn math",
        status: "in progress",
        category: "study",
        createdAt: new Date().toISOString(),
        updatedAt: new Date().toISOString(),
    },
    {
        id: crypto.randomUUID(),
        title: "Coding",
        status: "urgent",
        category: "coding",
        createdAt: new Date().toISOString(),
        updatedAt: new Date().toISOString(),
    },
    {
        id: crypto.randomUUID(),
        title: "Cook",
        status: "completed",
        category: "cooking",
        createdAt: new Date().toISOString(),
        updatedAt: new Date().toISOString(),
    },
] satisfies Array<TodoType>;

export async function GET() {
    return NextResponse.json({ todos }, { status: 200 });
}
