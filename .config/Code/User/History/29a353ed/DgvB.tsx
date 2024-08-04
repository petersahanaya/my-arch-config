import { todoType } from "@/schemas/init.schema";
import cn from "@/utils/cn";

type ListProps = {} & Pick<todoType, "title" | "id" | "status">;

const statusColor: Record<todoType["status"], string> = {
    "in progress": "bg-yellow-300",
    completed: "bg-green-400",
    urgent: "bg-red-500",
};

const List = ({ id, status, title }: ListProps) => {
    return (
        <li className="flex items-center justify-between text-[.9rem]">
            <button className="flex items-center justify-around gap-3 font-[500] text-stone-600">
                <input
                    className="checked:bg-green-500"
                    type="checkbox"
                    name={title}
                    id="1"
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

            <select name="" id="">
                <option value="in progress">In progress</option>
                <option value="urgent">Urgent</option>
                <option value="completed">Completed</option>
            </select>
        </li>
    );
};

export default List;
