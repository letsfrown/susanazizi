<?php

return function ($site) {
  $limit    = 4;
  $arbeiten = $site->find('arbeiten')->children()->listed()->sortBy('date', 'desc')->paginate($limit);
  $pagination = $arbeiten->pagination();
  $more       = $pagination->hasNextPage();

  return [
    'arbeiten'   => $arbeiten,
    'more'     => $more,
    'html'     => '',
    'json'     => [],
  ];
};
