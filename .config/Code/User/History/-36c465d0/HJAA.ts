import { ReactNode } from "react";

type ReactChildren = {
    children: ReactNode;
} & ReactClassName;

type ReactClassName = {
    className?: string;
};
