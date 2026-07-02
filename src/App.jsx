import React from "react";
import { useState } from "react";
import { Login } from "./Login";

export const App = () => {
  const [isLogin, setIsLogin] = useState(false);
  const [user, setUser] = useState(
    JSON.parse(localStorage.getItem("user")) || null, // check localStorage មុន
  );

  const handleLogout = () => {
    localStorage.removeItem("token");
    localStorage.removeItem("user");
    setIsLogin(false);
    setUser(null);
  };
  if (!user) {
  return <Login onLoginSuccess={(u) => setUser(u)} />;   // show Login form
}

  return (
    <div>
      <h1>Welcome {user.name}</h1>
      <button onClick={handleLogout}>Logout</button>
    </div>
  );
};
