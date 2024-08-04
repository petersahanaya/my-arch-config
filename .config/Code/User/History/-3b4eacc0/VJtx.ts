import { z } from "zod";

const todoSchema = z.object({
    id: z.string(),
    title: z.string(),
    category: z.string(),
    complete: z.boolean(),
    folderId: z.string(),
});

const folderSchema = z.object({
    id: z.string(),
    name: z.string(),
    children: z.array([todoSchema]),
    authorId: z.string(),
    createdAt: z.string().datetime(),
    updatedAt: z.string().datetime(),
});
