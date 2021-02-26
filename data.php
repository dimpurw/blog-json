<?php

function getBlogs()
{
    return json_decode(file_get_contents('data.json'), true);
}

function getBlogById($id)
{
    $blogs = getBlogs();
    foreach ($blogs as $blog) {
        if ($blog['id'] == $id) {
            return $blog;
        }
    }
    return null;
}

function createBlog($data)
{
    $blogs = getBlogs();
    $idsList = array_column($users, 'id');
    $auto_increment_id = max($idsList) + 1;
    $data['id'] = $auto_increment_id;
    $blogs[] = $data;

    putJson($blogs);

    return $data;
}

function updateBlog($data, $id)
{
    $updateBlog = [];
    $blogs = getBlogs();
    foreach ($blogs as $x => $blog) {
        if ($blog['id'] == $id) {
            $blogs[$x] = $updateBlog = array_merge($blog, $data);
        }
    }

    putJson($blogs);

    return $updateBlog;
}

function deleteBlog($id)
{
    $blogs = getBlogs();

    foreach ($blogs as $x => $blog) {
        if ($blog['id'] == $id) {
            array_splice($blogs, $x, 1);
        }
    }

    putJson($blogs);
}

function putJson($blog)
{
    file_put_contents('data.json', json_encode($blog),LOCK_EX);
}
?>