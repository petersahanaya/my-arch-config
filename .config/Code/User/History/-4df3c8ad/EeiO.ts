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

// id: z.string(),
// title: z.string(),
// category: z.string(),
// status: z.enum(["in progress", "completed", "urgent"]),
// folderId: z.string().nullish(),
// createdAt: z.string().datetime(),
// updatedAt: z.string().datetime(),

export async function GET() {
    return NextResponse.json({ todos }, { status: 200 });
}
