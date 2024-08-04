import { z } from "zod";

export const todoSchema = z.object({
    id: z.string(),
    title: z.string(),
    category: z.string(),
    complete: z.boolean(),
    folderId: z.string(),
    createdAt: z.string().datetime(),
    updatedAt: z.string().datetime(),
});

export const folderSchema = z.object({
    id: z.string(),
    name: z.string(),
    children: z.array(todoSchema),
    authorId: z.string(),
    createdAt: z.string().datetime(),
    updatedAt: z.string().datetime(),
});