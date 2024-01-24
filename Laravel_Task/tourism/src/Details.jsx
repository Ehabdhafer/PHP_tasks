import { useParams } from "react-router-dom";
import React, { useEffect, useState } from "react";
import axios from "axios";
import Cookies from "js-cookie";

const BlogDetails = () => {
  const [blogg, setBlog] = useState([]);
  const { id } = useParams();
  const token = Cookies.get("token");
  axios.defaults.headers.common["Authorization"] = `Bearer ${token}`;
  console.log(id);
  useEffect(() => {
    axios
      .get(`http://localhost:8000/getblogid/${id}`)
      .then((response) => {
        setBlog(response.data);

        // console.log(response.data);
      })
      .catch((error) => {
        console.error("Error fetching data:", error);
      });
  }, []);
  // console.log(blogg);
  return (
    <div>
      <div className="bg-gray-100 p-4 rounded-lg">
        <h2 className="text-3xl font-semibold mb-2 ml-40">{blogg.title}</h2>
        <p className="text-gray-700 font-semibold mb-6 ml-40">
          City: {blogg.city}
        </p>
        <p className="text-gray-800 mb-2 mx-40">{blogg.created_at}</p>
        <p className="text-gray-800 mb-2 mx-40">{blogg.description}</p>
        <p className="text-black font-semibold ml-40">Author: {blogg.author}</p>
        <p className="text-black font-semibold ml-40">
          Author Name: {blogg.username}
        </p>
      </div>
    </div>
  );
};

export default BlogDetails;
