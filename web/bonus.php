<?php

function bonus() : string
{
    // TODO
    switch(getenv("INSTANCE_TYPE")){
        case "production":
            return "*PROD*";
        case "build":
            return "*DEV*";
    }
}

echo bonus();