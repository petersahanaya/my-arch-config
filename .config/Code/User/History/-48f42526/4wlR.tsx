import Header from "@ui/header";
import Line from "@ui/line";
import Container from "@ui/container";
import TanstackProvider from "@ui/tanstack";

import { jakartaSans } from "@/utils/fonts/jakartaSans";
import "@/styles/globals.css";

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
