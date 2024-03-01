import { Link } from "@inertiajs/react";
import styled from "styled-components";

const NavContainer = styled.div`
    text-align: center;
`;

const Title = styled.div`
    text-align: center;
`;

function Header() {
    return (
        <NavContainer>
            <Title> Trouve ton truc </Title>
        </NavContainer>
    );
}

export default Header;
