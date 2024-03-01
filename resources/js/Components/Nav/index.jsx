import { Link } from "@inertiajs/react";
import styled from "styled-components";
import "react-datepicker/dist/react-datepicker.css";
import React, { useState } from "react";
import DatePicker from "react-datepicker";

const NavContainer = styled.div`
    display: flex;
    flex-direction: column;
    background-color: #e6e6e6;
    text-align: center;
    width: 350px;
    margin-right: 40px;
`;

const Text = styled.a`
    text-align: center;
`;

const Button = styled.button`
    background-color: green;
`;

function Nav() {
    const [startDate, setStartDate] = useState(null);
    return (
        <NavContainer>
            <Text>Date :</Text>
            <DatePicker
                selected={startDate}
                onChange={(date) => setStartDate(date)}
                dateFormat="dd/MM/yyyy"
                placeholderText="Sélectionnez une date"
                isClearable
            />
        </NavContainer>
    );
}

export default Nav;
