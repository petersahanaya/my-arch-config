import Header from "@ui/header";
import Line from "@ui/line";
import Container from "@ui/container";
import { jakartaSans } from "@/fonts/jakartaSans";
import "./globals.css";
import TanstackProvider from "@/ui/tanstack";

export default function RootLayout({
    children,
}: Readonly<{
    children: React.ReactNode;
}>) {
    return (
        <html lang="en">
            <body className={jakartaSans.className}>
                <TanstackProvider>
                    <Container>
                        <Header>
                            <Header.title>Notion</Header.title>
                            <Header.close />
                        </Header>

                        <Line />
                        {children}
                    </Container>
                </TanstackProvider>
            </body>
        </html>
    );
}