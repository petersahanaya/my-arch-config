import cn from "@/utils/cn";
import { TodoType } from "@/utils/schemas/init.schema";

type ListProps = {} & Pick<TodoType, "title" | "id" | "status">;

const statusColor: Record<TodoType["status"], string> = {
    "in progress": "bg-yellow-300",
    completed: "bg-green-400",
    urgent: "bg-red-500",
};

const List = ({ id, status, title }: ListProps) => {
    return (
        <li className="flex items-center justify-between text-[.9rem]">
            <button className="flex items-center justify-around gap-3 font-[500] text-stone-600">
                <input
                    className="h-4 w-4 rounded-md accent-green-400"
                    type="checkbox"
                    name={title}
                />

                <label htmlFor={title}>
                    <p>{title}</p>
                </label>
            </button>
            <span
                className={cn(
                    "w-40 rounded-full p-2 px-7 text-center font-[600] capitalize",
                    statusColor[status]
                )}
            >
                {status}
            </span>
        </li>
    );
};

export default List;
