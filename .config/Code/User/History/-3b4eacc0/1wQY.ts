import { z } from "zod";

export const todoSchema = z.object({
    id: z.string(),
    title: z.string(),
    category: z.string(),
    status: z.enum(["in progress", "completed", "urgent"]),
    folderId: z.string(),
    createdAt: z.string().datetime(),
    updatedAt: z.string().datetime(),
});

export type todoType = z.infer<typeof todoSchema>;

export const folderSchema = z.object({
    id: z.string(),
    name: z.string(),
    children: z.array(todoSchema),
    authorId: z.string(),
    createdAt: z.string().datetime(),
    updatedAt: z.string().datetime(),
});
