<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/errors/ad_sharing_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Errors;

class AdSharingError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
5google/ads/googleads/v8/errors/ad_sharing_error.protogoogle.ads.googleads.v8.errors"�
AdSharingErrorEnum"�
AdSharingError
UNSPECIFIED 
UNKNOWN 
AD_GROUP_ALREADY_CONTAINS_AD"
INCOMPATIBLE_AD_UNDER_AD_GROUP
CANNOT_SHARE_INACTIVE_ADB�
"com.google.ads.googleads.v8.errorsBAdSharingErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/errors;errors�GAA�Google.Ads.GoogleAds.V8.Errors�Google\\Ads\\GoogleAds\\V8\\Errors�"Google::Ads::GoogleAds::V8::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

