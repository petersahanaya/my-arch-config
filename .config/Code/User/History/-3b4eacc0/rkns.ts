import { z } from "zod";

const folderSchema = z.object({
    id: z.string(),
    name: z.string(),
    authorId: z.string(),
    createdAt: z.string().datetime(),
});
