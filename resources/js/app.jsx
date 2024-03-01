import "./bootstrap";
import "../css/app.css";

import { createRoot } from "react-dom/client";
import { createInertiaApp } from "@inertiajs/react";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import styled from "styled-components";
import Header from "./Components/Header";
import Nav from "./Components/Nav";

const appName = import.meta.env.VITE_APP_NAME || "Laravel";

const Container = styled.div`
    display: flex;
`;

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.jsx`,
            import.meta.glob("./Pages/**/*.jsx")
        ),
    setup({ el, App, props }) {
        const root = createRoot(el);

        root.render(
            <>
                <Header />
                <Container>
                    <Nav />
                    <App {...props} />
                </Container>
            </>
        );
    },
    progress: {
        color: "#4B5563",
    },
});
