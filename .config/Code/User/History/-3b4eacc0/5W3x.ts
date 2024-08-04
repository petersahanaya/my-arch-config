import { z } from "zod";

const todoSchema = z.object({
    id: z.string(),
    title: z.string(),
    category: z.string(),
    complete: z.boolean(),
});

const folderSchema = z.object({
    id: z.string(),
    name: z.string(),
    children: z.array([]),
    authorId: z.string(),
    createdAt: z.string().datetime(),
    updatedAt: z.string().datetime(),
});
