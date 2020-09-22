<?php
  function findAndHighlightMyCode($body){

                if(strpos($body, ":start")){
                    $close = preg_replace('/:[end]+/', '</code></pre>', $body);
                    if(strpos($body, ":starthtml")){
                        $Tag = preg_replace('/:[starthtml]+/', '<pre class="language-html"><code>', $close);
                    }
                    else if(strpos($body, ":startcss")){
                        $Tag = preg_replace('/:[startcss]+/', '<pre class="language-css"><code>', $close);
                    }
                    else if(strpos($body, ":startcpp")){
                        $Tag = preg_replace('/:[startcpp]+/', '<pre class="language-cpp"><code>', $close);
                    }
                   else if(strpos($body, ":startphp")){
                    $Tag = preg_replace('/:[startphp]+/', '<pre class="language-php"><code>', $close);
                    }
                   else if(strpos($body, ":startjava")){
                        $Tag = preg_replace('/:[startjava]+/', '<pre class="language-java"><code>', $close);
                    }
                    else if(strpos($body, ":startpython")){
                        $Tag = preg_replace('/:[startpython]+/', '<pre class="language-python"><code>', $close);
                    }
                    else if(strpos($body, ":startsql")){
                        $Tag = preg_replace('/:[startpython]+/', '<pre class="language-sql"><code>', $close);
                    }
                    else if(strpos($body, ":startruby")){
                        $Tag = preg_replace('/:[startpython]+/', '<pre class="language-ruby"><code>', $close);
                    }

                    $new = explode('#',$Tag);
                    return $new;

                }
                else{
                    $Tag=null;
                    return $body;
                }

                }




