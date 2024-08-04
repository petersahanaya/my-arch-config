import { jakartaSans } from "@/fonts/jakartaSans";
import "./globals.css";

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en">
      <body className={jakartaSans.variable}>{children}</body>
    </html>
  );
}
