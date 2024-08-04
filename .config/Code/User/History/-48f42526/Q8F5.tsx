import { jakartaSans } from "@/fonts/jakartaSans";
import "./globals.css";

export default function RootLayout({
    children,
}: Readonly<{
    children: React.ReactNode;
}>) {
    return (
        <html lang="en">
            <body className={jakartaSans.className}>
                <Header>
                    <Header.title>Notion</Header.title>
                    <Header.close />
                </Header>

                <Line />
                {children}
            </body>
        </html>
    );
}
